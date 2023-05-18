const compositionVsInheritance = () => {
    console.log('Object Oriented Programming (OOP) - Inheritance')

    class Monster {
        constructor(subject) {
            this.subject = subject
        }

        eat() {
            console.log(`${this.subject} ate`)
        }

        sleep() {
            console.log(`${this.subject} sleep`)
        }
    }

    class FlyingMonster extends Monster {
        fly() {
            console.log(`${this.subject} flew`)
        }
    }

    class SwimmingMonster extends Monster {
        swim() {
            console.log(`${this.subject} swam`)
        }
    }

    const bear = new Monster('bear')
    bear.eat()
    bear.sleep()

    const eagle = new FlyingMonster('eagle')
    eagle.eat()
    eagle.sleep()
    eagle.fly()

    const crocodile = new SwimmingMonster('crocodile')
    crocodile.eat()
    crocodile.sleep()
    crocodile.swim()

    // ================================================================================================================================================================================

    class FlyingSwimmingMonsterV1 extends Monster {
        fly() {
            console.log(`${this.subject} flew`)
        }

        swim() {
            console.log(`${this.subject} swam`)
        }
    }

    class FlyingSwimmingMonsterV2 extends FlyingMonster {
        swim() {
            console.log(`${this.subject} swam`)
        }
    }

    class FlyingSwimmingMonsterV3 extends SwimmingMonster {
        fly() {
            console.log(`${this.subject} flew`)
        }
    }

    console.log('=================================================================================================')
    console.log('Functional Programming - Composition')

    const eater = ({ subject }) => ({ eat: () => console.log(`${subject} ate`) })
    const sleeper = ({ subject }) => ({ sleep: () => console.log(`${subject} slept`) })
    const flyer = ({ subject }) => ({ fly: () => console.log(`${subject} flew`) })
    const swimmer = ({ subject }) => ({ swim: () => console.log(`${subject} swam`) })

    const createMonster = (subject) => ({ name: subject, ...eater({ subject }), ...sleeper({ subject }) })
    const createFlyingMonster = (subject) => ({ name: subject, ...createMonster(subject), ...flyer({ subject }) })
    const createSwimmingMonster = (subject) => ({ name: subject, ...createMonster(subject), ...swimmer({ subject }) })
    const createFlyingSwimmingMonster = (subject) => ({ name: subject, ...createMonster(subject), ...flyer({ subject }), ...swimmer({ subject }) })

    const tiger = createMonster('tiger')
    tiger.eat()
    tiger.sleep()

    const owl = createFlyingMonster('owl')
    owl.eat()
    owl.sleep()
    owl.fly()

    const dolphin = createSwimmingMonster('dolphin')
    dolphin.eat()
    dolphin.sleep()
    dolphin.swim()

    const udin = createFlyingSwimmingMonster('udin')
    udin.eat()
    udin.sleep()
    udin.fly()
    udin.swim()
}

export default compositionVsInheritance
